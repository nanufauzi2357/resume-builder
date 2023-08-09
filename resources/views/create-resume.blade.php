<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Resume</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div style="padding: 10px;">
            <h1>CREATE YOUR RESUME</h1>
            <br>
            <form method="post" action="">
                {{ csrf_field() }}
                
                <h3>Personal Details</h3>
                <div class="form-group col-md-6 m-1">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group col-md-6 m-1">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" required>
                </div>
                <div class="form-group col-md-6 m-1">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <br>
                
                <h3>Highest Education</h3>
                <div class="form-group col-md-6 m-1">
                    <label for="degree_title">Degree Title</label>
                    <input type="text" name="degree_title" class="form-control">
                </div>
                <div class="form-group col-md-6 m-1">
                    <label for="institution_name">Institution Name</label>
                    <input type="text" name="institution_name" class="form-control">
                </div>
                <div class="form-group col-md-6 m-1">
                    <label for="cgpa">CGPA</label>
                    <input type="number" name="cgpa" step="0.01" class="form-control">
                </div>
                <br>

                <h3>Latest Work Experience</h3>
                <div class="form-group col-md-6 m-1">
                    <label for="job_title">Job Title</label>
                    <input type="text" name="job_title" class="form-control">
                </div>
                <div class="form-group col-md-6 m-1">
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" class="form-control">
                </div>
                <div class="form-group col-md-6 m-1">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary m-1">Submit</button>
            </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>