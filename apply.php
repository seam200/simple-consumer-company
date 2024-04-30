<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Application Form</title>
    <style>
      body {
        padding: 50px;
        font-family: Arial, sans-serif;
      }

      .form-group {
        margin-bottom: 20px;
      }

      label {
        display: block;
        font-weight: bold;
      }

      input[type="text"],
      select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #ccc;
      }

      button[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h2>Application Form</h2>
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" placeholder="Enter your name" required />
        </div>
       <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" id="email" placeholder="Enter your email" required />
        </div>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" id="phone" placeholder="Enter your Mobile Number" required minlength="11" />
        </div>
        <div class="form-group">
          <label for="location">Location:</label>
          <input
            type="text"
            id="location"
            placeholder="Enter your location"
            required
          />
        </div>
        <div class="form-group">
          <label for="">Gender :</label>
          <input type="radio" name="gndr" value="Male" />Male
          <input type="radio" name="gndr" value="Female" />Female
        </div>
        <div class="form-group">
          <label for="apply">Apply For :</label>
          <select name="" id="apply">
            <option value="">--Select Apply For--</option>
            <option value="dp">Dipo</option>
            <option value="dd">District Dealer</option>
            <option value="sd">Sub Dealer</option>
            <option value="job">Jobs</option>
          </select>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
