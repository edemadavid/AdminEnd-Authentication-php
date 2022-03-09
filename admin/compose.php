<?php include 'adminPublic/template/header.php';?>


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Compose Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="container">
        <div class="alert alert-success" role="alert">
            Your blog has been saved successfully
        </div>
        <div class="alert alert-danger" role="alert">
            Something went wrong, please try again
        </div>
    </section>

    <section class="section">

        <form class="composeForm container">
            <div class="mb-3">
                <label for="blogTitle" class="form-label">Blog Title</label>
                <input type="text" class="form-control" id="blogTitle">
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>None</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Select a Category</label>
            </div>

            <div class="mb-3">
                <label for="formFileSm" class="form-label">Select photo</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>

            <div class="form-floating mb-2">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Compose Blog</label>
            </div>
        
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Auto Save</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </section>



<?php include 'adminPublic/template/footer.php';?>