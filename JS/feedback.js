// Phone mask
var phone = document.querySelectorAll("input[type=tel]");

for (var i = 0; i < phone.length; i++) {
  phone[i].addEventListener("focus", function () {
    mask = IMask(this, {
      mask: "+{38} (000) 000 00 00",
      overwrite: true,
      lazy: false,
      autofix: true,
    });
  });
  phone[i].addEventListener("blur", function () {
    if (this.value.match("_")) {
      mask.masked.reset();
    }
  });
}
