<div class="relative w-full h-48 p-4 border-2 border-dashed rounded-lg border-gray-700 flex flex-col justify-center items-center cursor-pointer"
    onclick="document.getElementById('fileInput').click()">
    <input type="file" id="fileInput" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
        onchange="handleFileSelect(event)">
    <div class="flex flex-col items-center justify-center space-y-2">
        <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <p class="text-gray-300">
            <span class="text-green-500">Click to upload</span> or drag and drop
        </p>
        <p class="text-gray-500 text-sm">SVG, PNG, JPG or GIF (max. 800x400px)</p>
    </div>
    <div id="fileInfo" class="flex flex-col items-center justify-center space-y-2 hidden">
        <!-- File information will be displayed here -->
    </div>
</div>

<script>
    function handleFileSelect(event) {
        const fileInfo = document.getElementById('fileInfo');
        const fileInput = document.getElementById('fileInput');
        fileInfo.innerHTML = ''; // Clear previous file info
        if (fileInput.files.length > 0) {
            for (const file of fileInput.files) {
                const fileName = document.createElement('p');
                fileName.className = 'text-gray-300 text-sm';
                fileName.textContent = file.name;
                fileInfo.appendChild(fileName);
            }
            fileInfo.classList.remove('hidden');
        } else {
            fileInfo.classList.add('hidden');
        }
    }
</script>
