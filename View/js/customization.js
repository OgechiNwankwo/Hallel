const imageInput = document.getElementById("image");
const target = document.getElementById("customImg");
const button = document.getElementById("submit");
const desc = document.getElementById("journal_desc");


imageInput.onchange = (evt) => {
  const [file] = imageInput.files;
  if (file) {
    target.src = URL.createObjectURL(file);
  }
};


// button.onclick('click', function(){
//     desc.textContent = message;
// });

function populate(){
    let message = document.getElementById("message");
    let textVal = message.value;
    desc.innerText = textVal;
}