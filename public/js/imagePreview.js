let inputimage      = document.querySelector("#inputimage")
let preview    = document.querySelector(".preview-container")
let previewImg = document.querySelector(".preview-container img")

inputimage.addEventListener("change",(e)=>{handleChange(e)})

function handleChange(event){
  let file     = event.target.files[0]
  const reader = new FileReader()
  
  reader.readAsDataURL(file)
  
  reader.onload = (e)=>{
    preview.style.display = "block"
    previewImg.src        = e.target.result
  }
}