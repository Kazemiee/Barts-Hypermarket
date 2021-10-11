function ShowExtraDetails() {
  var x = document.getElementById("extra-details");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function TogglePsychosis() {
  var sch1 = document.getElementById("schizophrenia");
  var sch2 = document.getElementById("not-schizophrenia");
  var style = document.getElementById("style");
  if (sch1.style.display === "none") {
    sch1.style.display = "block";
    sch2.style.display = "none";
    style.href = "grimdark-style.css";
  } else {
    sch2.style.display = "block";
    sch1.style.display = "none";
    style.href = "style.css";
  }
}
