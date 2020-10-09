    <main class="container">
        <!-- Show the main content if user logged in -->
         <?php if (isset($_SESSION["email"])): ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-center">
                            <h4 class="my-0 font-weight-normal">Image Sharing</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-center">
                            <h4 class="my-0 font-weight-normal">Marketplace</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-center">
                            <h4 class="my-0 font-weight-normal">Food Delivery</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>        
            </div>
        <!-- Otherwise, show a sign in request -->
        <?php else: ?>
            <p class="text-center">Please sign in first!</p>
        <?php endif ?>
    </main>