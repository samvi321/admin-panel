var hash = {
    'png' : 1,
    'jpg' : 1,
    'jpeg' : 1,
};
  function check_extension(filename,submitId) {
    var ext = filename.slice(filename.lastIndexOf(".") + 1).toLowerCase();
    var submitEl = document.getElementById(submitId);
    if (hash[ext]) {
        submitEl.disabled = false;
        return true;
    } else {
        alert("Invalid filename, please select another file");
        submitEl.disabled = true;
        return false;
    }
}