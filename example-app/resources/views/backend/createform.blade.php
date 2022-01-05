<style>
    :root {
        --color-white: #f3f3f3;
        --color-darkred: #fa2500;
        --color-darkred-alpha: rgba(212, 27, 14, 0.8);
        --color-green: #37af65;
    }

    body {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        color: var(--color-white);
        margin: 0;
    }

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
        background: var(--color-darkred);
        /* background-image: linear-gradient(115deg, rgba(58, 58, 158, 0.8), rgba(136, 136, 206, 0.7)), url(https://cdn.freecodecamp.org/testable-projects-fcc/images/survey-form-background.jpeg); */
        background-image: linear-gradient(115deg, rgba(196, 84, 20, 0.8), rgba(201, 15, 15, 0.7)), url(https://www.worldhistory.org/img/c/p/1200x627/12026.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .container {
        display: flex;
        flex-direction: column;
        margin: 2.7rem 20rem 0rem 20rem;
        flex-wrap: wrap;
    }

    .header {
        margin-bottom: 1.6rem;
    }

    .text-center {
        text-align: center;
    }

    .description {
        font-style: italic;
    }

    p {
        font-size: 18.7px;
    }

    #survey-form {
        display: flex;
        flex-direction: column;
        padding: 3rem 3rem 3rem 3rem;
        border-radius: 0.2rem;
        background: var(--color-darkred-alpha);
    }

    .form-group {
        display: flex;
        flex-direction: column;
        margin: 0 0 1.7rem 0;
    }

    label {
        display: flex;
        align-items: center;
        font-size: 1.225rem;
        margin-bottom: 0.5rem;
    }

    input {
        padding: 8.9px;
    }

    .form-control {
        font-size: 16.7px;
        border-radius: 6px;
    }

    #dropdown,
    #most-like {
        padding: 8.9px;
        background-color: #ffffff;
        color: #706e6e;
    }

    .input-radio,
    .input-checkbox {
        display: inline-block;
        margin-right: 0.625rem;
        min-height: 1.25rem;
        min-width: 1.25rem;
    }

    .input-textarea {
        min-height: 120px;
        width: 100%;
        padding: 0.625rem;
        resize: vertical;
    }

    #comments {
        font-size: 16.7px;
    }

    .submit-button {
        display: block;
        width: 100%;
        padding: 0.75rem;
        background: var(--color-green);
        color: inherit;
        border-radius: 6.1px;
        border-color: var(--color-darkred-alpha);
        cursor: pointer;
    }

    #submit {
        font-size: 16.7px;
    }

    @media (max-width: 768px) {
        .container {
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
        }
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">
                Add Course
            </h1>
            <p id="description" class="description text-center">
                Please add a course
            </p>
        </header>
        <form method="POST" action="{{route('course.store')}}" id="survey-form">
            @csrf

            <div class="form-group">
                <label id="title-label" for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter course title" required>
            </div>

            <div class="form-group">
                <label id="name-label" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter course name" required>
            </div>

            <div class="form-group">
                <label id="author-label" for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control" placeholder="Enter course author" required>
            </div>

            <div class="form-group">
                <label id="image_url-label" for="image_url">Image Url</label>
                <input type="text" name="image_url" id="image_url" class="form-control" placeholder="Enter course Image Url" required>
            </div>

            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>

</html>
