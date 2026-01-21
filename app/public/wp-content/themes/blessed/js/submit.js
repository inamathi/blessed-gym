document.addEventListener(
  "DOMContentLoaded",
  function (event) {
    const targetButton = document.getElementById("btnSubmit");
    const triggerCheckbox = document.querySelector('input[name="check-agree"]');

    console.log("triggerCheckbox", triggerCheckbox);
    console.log("targetButton", targetButton);

    targetButton.disabled = true;
    targetButton.classList.add("is-inactive");

    triggerCheckbox.addEventListener(
      "change",
      function () {
        if (this.checked) {
          targetButton.disabled = false;
          targetButton.classList.remove("is-inactive");
          targetButton.classList.add("is-active");
          console.log(false, "able");
        } else {
          targetButton.disabled = true;
          targetButton.classList.remove("is-active");
          targetButton.classList.add("is-inactive");
          console.log(false, "disable");
        }
      },
      false
    );
  },
  false
);
