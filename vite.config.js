// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import glob from 'glob';
import path from 'path';



// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                 'resources/css/app.css',
//                 'resources/js/app.js',
//                 // Include additional assets as needed
//                 'resources/assets/icons/Cancelled.svg'
//             ],
//             refresh: true,
//         }),
//     ],
// });

function getAllFiles(dirPath, arrayOfFiles) {
    const files = glob.sync(`${dirPath}/**/*.*`);

    return files.reduce((acc, file) => {
        const ext = path.extname(file);
        if (['.js', '.css'].includes(ext)) {
            acc.push(file);
        }
        return acc;
    }, arrayOfFiles);
}

const inputFiles = getAllFiles('resources', []);

export default defineConfig({
    plugins: [
        laravel({
            input: inputFiles,
            refresh: true,
        }),
    ],
});
