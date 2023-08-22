function rot13(message) {
    return message.replace(/[a-zA-Z]/g, (char) => {
      const code = char.charCodeAt(0);
      const isUpperCase = code >= 65 && code <= 90;
      const shift = isUpperCase ? 65 : 97;
      return String.fromCharCode(((code - shift + 13) % 26) + shift);
    });
  }
  