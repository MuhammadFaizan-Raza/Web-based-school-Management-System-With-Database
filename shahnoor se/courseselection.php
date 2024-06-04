<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">

body {
	background-color: #E9F1FA;
}

body,td,th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
.headingcol {
	color: #F00;
}
.bodyfont {
	font-family: "Times New Roman", Times, serif;
}
.bodyfont1 {
	font-family: "Times New Roman", Times, serif;
}
div#part_1 {
	border-color:#2A0000;
	border-style:ridge;
	background-color:#00ABE4;
	color:#FFF;
	
}

div#part_2 { 
    border-color:#2A0000;
	background-color:#00ABE4;
	color:#FFF }

input {
      display: block;
      width: 100%;
      padding: 5px;
      background-color: #00ABE4;
      color: #FFFFFF;
      border: none;
      border-radius: 3px;
      font-weight: bold;
      cursor: pointer;
    }
body {
	background-color: #E9F1FA;
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="a1.css">
    <script>
        function generateCourseTable() {
            var classDropdown = document.getElementById("ctl00_ContentPlaceHolder1_cmbSession_grp1_ct");
            var selectedClass = classDropdown.value;

            var sectionDropdown = document.getElementById("ctl00_ContentPlaceHolder1_cmbCourse");
            var selectedSection = sectionDropdown.value;

            var courses = [];

            if ((selectedClass === "1" || selectedClass === "2" || selectedClass === "3" || selectedClass === "4" || selectedClass === "5") && (selectedSection === "Section A" || selectedSection === "Section B" || selectedSection === "Section C" || selectedSection === "Section D")) {
                courses = ["English Grammar", "English Text", "Mathematics", "Urdu", "Islamiyat", "Science","Arts"];
            } else if ((selectedClass === "6" || selectedClass === "7") && (selectedSection === "Section A" || selectedSection === "Section B" || selectedSection === "Section C" || selectedSection === "Section D")) {
                courses = ["English Grammar", "English Text", "Mathematics", "Urdu", "Islamiyat","Science", "Arts", "Social Studies", "Geography"];
            } else if (selectedClass === "8" && (selectedSection === "Section A" || selectedSection === "Section B" || selectedSection === "Section C" || selectedSection === "Section D")) {
                courses = ["English Grammar", "English Text", "Mathematics", "Physics", "Chemistry", "Biology", "Pakistan Studies", "Urdu", "Islamiyat"];
            } else if (selectedClass === "9 Arts Group" && (selectedSection === "Section A" || selectedSection === "Section B" || selectedSection === "Section C" || selectedSection === "Section D")) {
                courses = ["English", "Islamiyat", "Civics", "Language", "General Maths", "Education"];
            } else if (selectedClass === "9 Science Group" && (selectedSection === "Section A" || selectedSection === "Section B" || selectedSection === "Section C" || selectedSection === "Section D")) {
                courses = ["English", "Urdu", "Islamiyat", "Chemistry", "Biology / Computer Science", "Mathematics", "Physics"];
            } else if (selectedClass === "10 Arts Group" && (selectedSection === "Section A" || selectedSection === "Section B" || selectedSection === "Section C" || selectedSection === "Section D")) {
                courses = ["Language", "Civic", "Home Economics", "General Science", "General Maths", "Education"];
            } else if (selectedClass === "10 Science Group" && (selectedSection === "Section A" || selectedSection === "Section B" || selectedSection === "Section C" || selectedSection === "Section D")) {
                courses = ["English", "Urdu", "Pakistan Studies", "Chemistry", "Biology / Computer Science", "Mathematics", "Physics"];
            }

            var tableContainer = document.getElementById("courseTableContainer");

            // Clear existing table
            tableContainer.innerHTML = "";

            // Create the table
            var table = document.createElement("table");
            table.classList.add("table");

            // Create the table header
            var thead = document.createElement("thead");
            var headerRow = document.createElement("tr");
            var th = document.createElement("th");
            th.textContent = "Course Name";
            headerRow.appendChild(th);
            thead.appendChild(headerRow);
            table.appendChild(thead);

            // Create the table body
            var tbody = document.createElement("tbody");
            for (var i = 0; i < courses.length; i++) {
                var row = document.createElement("tr");
                var tdCheckbox = document.createElement("td");
                var tdCourseName = document.createElement("td");
                var checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.name = "courseCheckbox";
                tdCheckbox.appendChild(checkbox);
                tdCourseName.textContent = courses[i];
                row.appendChild(tdCheckbox);
                row.appendChild(tdCourseName);
                tbody.appendChild(row);
            }
            table.appendChild(tbody);
            tableContainer.appendChild(table);
            var submitButton = document.getElementById("submitButton");
            submitButton.style.display = "block";
        }
        
        function redirectToSubmitPage() {
            window.location.href = "submit_course.php";
        }
    </script>
</head>
<body>
<div id="main-page">
<div id="part_1">
<p class="main_para" id="intro"><strong>School Management Portal</strong></p>
</div>
<div id="part_2">
<p class="main_para" id="intro_1"><strong>Course Selection</strong></p>
</div> 
    <h1></h1>
    <div class="form-group row">
        <div class="col-lg-4">
            <label>Class:<span class="text-danger"></span></label>
            <select name="ctl00$ContentPlaceHolder1$cmbSession_grp1_ct" onchange="generateCourseTable()" id="ctl00_ContentPlaceHolder1_cmbSession_grp1_ct" class="form-control select" required="required">
                <option selected="selected" value="">- Select -</option>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
                <option value="6">Class 6</option>
                <option value="7">Class 7</option>
                <option value="8">Class 8</option>
                <option value="9 Arts Group">Class 9 Arts Group</option>
                <option value="9 Science Group">Class 9 Science Group</option>
                <option value="10 Arts Group">Class 10 Arts Group</option>
                <option value="10 Science Group">Class 10 Science Group</option>
            </select>
        </div>
        <div class="col-lg-4">
            <label>Section:<span class="text-danger"></span></label>
            <select name="ctl00$ContentPlaceHolder1$cmbCourse" onchange="generateCourseTable()" id="ctl00_ContentPlaceHolder1_cmbCourse" class="form-control select" required="required">
                <option selected="selected" value="">- Select -</option>
                <option value="Section A">Section A</option>
                <option value="Section B">Section B</option>
                <option value="Section C">Section C</option>
                <option value="Section D">Section D</option>
            </select>
        </div>
    </div>
    <div id="courseTableContainer"></div>
    <button id="submitButton" class="btn btn-primary" style="display: none;" onclick="redirectToSubmitPage()">Submit</button>
</body>
</html>
