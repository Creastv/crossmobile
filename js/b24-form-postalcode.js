class BitrixFormPostalCodeHandler {
  constructor() {
    this.FIELD_IDS = [
      "CONTACT_UF_CRM_1697205260305",
      "CONTACT_UF_CRM_1697205960625",
    ];
    this.initEventListener();
  }

  initEventListener() {
    window.addEventListener("b24:form:init", (event) => {
      window.hasHoursChanged = false;
      const bitrixForm = event.detail.object;
      this.handleFormInit(bitrixForm);
    });
  }

  handleFormInit(bitrixForm) {
    const fields = bitrixForm.getFields();
    fields.forEach((field) => {
      if (this.FIELD_IDS.includes(field.id)) {
        this.setupPostalCodeField(field);
      }
    });

    console.log(fields);
  }

  setupPostalCodeField(field) {
    //field.validated = true;
    field.type = field.id;
    const messages = field.messages.get("pl");

    if (messages && messages.fieldErrorInvalid) {
      messages[`fieldErrorInvalid${field.type}`] =
        "Wartość pola jest nieprawidłowa. Prawidłowy format to XX-XXX.";
    }

    field.formatters.push((value) => this.postalCodeFormatter(value));
    field.validators.push((value) => this.postalCodeValidator(value));
  }

  postalCodeValidator(value) {
    if (!value) {
      return false;
    }

    return this.isValidPostalCode(value);
  }

  postalCodeFormatter(value) {
    let digitsOnly = value.replace(/\D/g, "");

    if (digitsOnly.length === 2 && digitsOnly.indexOf("-") === -1) {
      return digitsOnly;
    }

    if (digitsOnly.length >= 2) {
      digitsOnly = digitsOnly.slice(0, 2) + "-" + digitsOnly.slice(2);
    }

    if (digitsOnly.length > 6) {
      digitsOnly = digitsOnly.slice(0, 6);
    }

    if (digitsOnly === "00-000") {
      return "";
    }

    return digitsOnly;
  }

  isValidPostalCode(postalCode) {
    const postalCodePattern = /^\d{2}-\d{3}$/;

    if (postalCodePattern.test(postalCode.trim())) {
      const parts = postalCode.split("-");
      const part1 = parts[0];
      const part2 = parts[1];

      if (!isNaN(part1) && !isNaN(part2)) {
        return true;
      }
    }

    return false;
  }
}

new BitrixFormPostalCodeHandler();
