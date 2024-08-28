<template>
    <div class="form">
        <h1>Create New Product</h1>
        <div class="form-group">
            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name" placeholder="Input name">
        </div>
        <div class="form-group">
            <label for="price">Price: </label><br>
            <input type="number" name="price" id="price" placeholder="Input price">
        </div>
        <div class="form-group">
            <label for="image">Image</label><br>
            <input type="file" name="image" id="image" @change="onFileSelected" placeholder="Input image">
        </div>
        <div class="form-group">
            <label for="qty">Quantity</label><br>
            <input type="number" name="qty" id="qty" value="1" placeholder="Input quantity" min="1">
        </div>
        <Button @click="onUpload" class="button-form" />
    </div>
</template>

<script>
import Button from './button.vue'
import axios from 'axios'

export default {
    data() {
        return {
            selectedFile: null
        }
    },
    methods: {
        onFileSelected(event) {
            // Ensure a file is selected before assigning
            if (!event.target.files.length) return;

            this.selectedFile = event.target.files[0];
        },
        async onUpload() {
            if (!this.selectedFile) {
                // Handle no file selected scenario (e.g., display an error message)
                console.error('Please select a file to upload.');
                return;
            }

            const formData = new FormData();
            formData.append('image', this.selectedFile, this.selectedFile.name);

            try {
                const response = await axios.post('/', formData, {
                    // Add headers if necessary (e.g., for content type)
                    // headers: { 'Content-Type': 'multipart/form-data' }
                });
                console.log('Upload successful:', response);
            } catch (error) {
                console.error('Upload failed:', error);
                // Handle upload errors gracefully (e.g., display error message)
            }
        }
    },
    components: {
        Button
    }
}
</script>

<style>
.form {
    width: 40%;
    min-width: 40%;
    padding: 20px 30px;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}

.form-group {
    width: 100%;
    margin-top: 20px;
}

.form-group input {
    width: 100%;
    font-size: 18px;
    padding: 5px 10px;
    margin-top: 5px;
    outline: none;
    border: 1px solid gray;
    border-radius: 5px;
    transition: all .3s ease-in-out;
}

.form-group input:focus {
    border: 1px solid #008000;
}

.button-form {
    margin-top: 20px;
    cursor: pointer;
}
</style>
