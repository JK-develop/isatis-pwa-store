<?php
// /how_to_use.php
include 'header.php';
?>

<div class="pagehead-bg primary-bg"></div>

<div class="container has-pagehead is-pagetitle">
    <div class="section">
        <h5 class="pagetitle">How to use</h5>
    </div>
</div>

<div class="container over">
    <div class="section">
        <div class="timeline">
            <div class="verline"></div>
            
            <div class="event has-date">
                <div class="date">
                    <h4 class="mdi mdi-access-point"></h4>
                    <div>01</div>
                </div>
                <div class="card-panel primary-bg white-text">
                    <div class='msg'>
                        <section>
                            <h6>Getting Started</h6>
                            <p>You can discover all available PWAs directly on the <strong>Home Page</strong>. To find PWAs based on specific categories, navigate to the <strong>Categories Page</strong>. If you'd like to add your own PWA to the platform, visit the <strong>New PWA Page</strong> to register it.</p>
                        </section>
                    </div>
                </div>
            </div>
            
            <div class="event has-date">
                <div class="date">
                    <h4 class="mdi mdi-apps"></h4>
                    <div>02</div>
                </div>
                <div class="card-panel blue-grey lighten-5">
                    <div class='msg'>
                        <section>
                            <h6>Home Page</h6>
                            <p>On the <strong><a href="/">Home Page</a></strong>, you can:</p>
                            <ul>
                                <li style="list-style-type: circle;">View a banner for every app along with a short description.</li>
                                <li style="list-style-type: circle;">See the categories, last update date, and votes for each app.</li>
                                <li style="list-style-type: circle;">Click the <strong>Go</strong> button to navigate to the related PWA app.</li>
                                <li style="list-style-type: circle;">Click on a banner to view more details about the app on a separate page.</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>

            <div class="event has-date">
                <div class="date">
                    <h4 class="mdi mdi-file-tree"></h4>
                    <div>03</div>
                </div>
                <div class="card-panel accent-bg white-text">
                    <div class='msg'>
                        <section>
                            <h6>Categories</h6>
                            <p>On the <strong><a href="categories.php">Categories Page</a></strong>, you can find PWA apps categorized with their title and logo. Clicking on a logo will take you to the selected app's PWA page.</p>
                        </section>
                    </div>
                </div>
            </div>

            <div class="event has-date">
                <div class="date">
                    <h4 class="mdi mdi-new-box"></h4>
                    <div>04</div>
                </div>
                <div class="card-panel blue-grey lighten-5">
                    <div class='msg'>
                        <section>
                            <h6>Registering a PWA</h6>
                            <p>To register your PWA:</p>
                            <ul>
                                <li style="list-style-type: circle;">Go to the <strong><a href="new_app.php">New PWA Page</a></strong>.</li>
                                <li style="list-style-type: circle;">Fill in the required details such as the PWA name, URL, category, and description.</li>
                                <li style="list-style-type: circle;">Click the <strong>Submit</strong> button to complete the process.</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
            
            <div class="event">
                <div class="card-panel blue-grey lighten-5">
                    <div class='msg'>Note: Authenticating your PWA app by using the email related to your website domain is necessary.</div>
                </div>
            </div>
            
            <div class="event has-date">
                <div class="date">
                    <h4 class="mdi mdi-approval"></h4>
                    <div>05</div>
                </div>
                <div class="card-panel accent-bg white-text">
                    <div class='msg'>
                        <section>
                            <h6>Using PWAs</h6>
                            <p>Click on any PWA link to access its features. On mobile devices, you can add the PWA to your home screen for easy access.</p>
                        </section>
                    </div>
                </div>
            </div>
            
            <div class="event has-date">
                <div class="date">
                    <h4 class="mdi mdi-cellphone-link"></h4>
                    <div>06</div>
                </div>
                <div class="card-panel blue-grey lighten-5">
                    <div class='msg'>
                        <section>
                            <h6>Support and Feedback</h6>
                            <p>If you encounter any issues or have suggestions, feel free to reach out to our support team at <a href="mailto:contact@isatis.vip">contact@isatis.vip</a>.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>