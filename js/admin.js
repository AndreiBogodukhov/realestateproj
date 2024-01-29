
// new upload button
document.getElementById('fileInput').addEventListener('change', handleFileSelect);

    function handleFileSelect(event) {
        const selectedFilesContainer = document.getElementById('selectedFiles');
        selectedFilesContainer.innerHTML = ''; // Clear previous selections

        const files = event.target.files;
        
        // Display selected file names
        for (const file of files) {
            const fileName = document.createElement('div');
            fileName.textContent = file.name;
            selectedFilesContainer.appendChild(fileName);
        }
    }
