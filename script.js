
document.addEventListener('click', function(e){
    const modal = document.getElementById('edit-button'); 
    if(e.target === modal) closeEdit(); 
});

function previewPic(input) {
    if(input.files && input.files[0]) {
        const reader = new FileReader(); 
        reader.onload = e => { 
            document.getElementById('picPreview').src = e.target.result; 

        }; 
        reader.readAsDataURL(input.files[0]); 
    }
}