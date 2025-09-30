<?php
// /new_app.php
include 'header.php';
?>

<div class="pagehead-bg primary-bg"></div>

<div class="container has-pagehead is-pagetitle">
    <div class="section">
        <h5 class="pagetitle">Register new PWA</h5>
    </div>
</div>

<div class="container over">
    <div class="section">
        <div class="row">
            <form id="pwaRegisterForm" method="POST" action="register_pwa_activation.php">
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="title" name="title" type="text" class="validate" required>
                        <label for="title">Title</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="weburl" name="weburl" type="url" class="validate" required>
                        <label for="weburl">URL</label>
                        <span id="url-error" style="color: orange; font-size: 12px; display: none;">Please enter a valid URL.</span>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="email" name="email" type="email" class="validate" required disabled>
                        <label for="email">Email</label>
                        <span id="emailError" style="color: orange; font-size: 12px; display: none;">Email domain must match the URL domain.</span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <select id="category" name="category[]" multiple required>
                            <option value="" disabled>Choose categories</option>
                            </select>
                        <label for="category">Category</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <textarea id="description" name="description" class="materialize-textarea" required></textarea>
                        <label for="description">Description</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="version" name="version" type="text" class="validate" required>
                        <label for="version">Version</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="logo" name="logo" type="url" class="validate" required>
                        <label for="logo">Logo URL</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <input id="banner" name="banner" type="url" class="validate" required>
                        <label for="banner">Banner URL</label>
                    </div>
                </div>

                <div class="row center">
                    <button type="submit" name="register" id="register" class="waves-effect waves-light btn-large bg-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Materialize select component
    var elems = document.querySelectorAll('select');
    M.FormSelect.init(elems);

    // Fetch categories dynamically
    fetch('fetch_categories.php')
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(data.error);
                return;
            }
            const categorySelect = document.getElementById('category');
            data.forEach(category => {
                const option = document.createElement('option');
                option.value = category.id;
                option.textContent = category.title;
                categorySelect.appendChild(option);
            });
            // Re-initialize the select component after adding options
            M.FormSelect.init(categorySelect);
        })
        .catch(error => console.error('Error fetching categories:', error));
    
    // URL and Email validation logic
    const urlField = document.getElementById('weburl');
    const emailField = document.getElementById('email');
    const urlError = document.getElementById('url-error');
    const emailError = document.getElementById('emailError');
    const registerButton = document.getElementById('register');

    function validateUrlAndEmail() {
        let urlValue = urlField.value.trim();
        let urlDomain = '';

        // Validate URL and extract domain
        try {
            if (urlValue && !/^https?:\/\//i.test(urlValue)) {
                urlValue = `https://${urlValue}`;
                urlField.value = urlValue;
            }
            const parsedURL = new URL(urlValue);
            urlDomain = parsedURL.hostname.replace(/^www\./, '');
            urlError.style.display = 'none';
            emailField.disabled = false;
            emailField.placeholder = `e.g., your-email@${urlDomain}`;
        } catch (e) {
            urlError.style.display = 'block';
            emailField.disabled = true;
            emailField.placeholder = 'Enter a valid URL first';
            emailField.value = '';
            emailError.style.display = 'none';
            return; // Stop if URL is invalid
        }
        
        // Validate Email against the URL domain
        const emailValue = emailField.value.trim();
        if (emailValue) {
            const emailDomain = emailValue.split('@')[1];
            if (emailDomain !== urlDomain) {
                emailError.style.display = 'block';
                registerButton.disabled = true; // Disable submit button
            } else {
                emailError.style.display = 'none';
                registerButton.disabled = false; // Enable submit button
            }
        } else {
             emailError.style.display = 'none';
             registerButton.disabled = false;
        }
    }
    
    urlField.addEventListener('blur', validateUrlAndEmail);
    emailField.addEventListener('input', validateUrlAndEmail);
});
</script>

<?php include 'footer.php'; ?>