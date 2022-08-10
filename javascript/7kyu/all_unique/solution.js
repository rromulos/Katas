function hasUniqueChars(str){
    const letters = [];
    for (const char of str) {
        if (letters.indexOf(char) > -1) {
            return false;
        }
        letters.push(char);
    }
    return true;
}