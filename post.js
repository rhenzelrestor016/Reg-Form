function post(){
				var input_title = document.getElementById("input_title").value;
				var input_firstname = document.getElementById("input_firstname").value;
				var input_middlename = document.getElementById("input_middlename").value;
				var input_lastname = document.getElementById("input_lastname").value;
				var input_content = document.getElementById("input_content").value;

				var date_today = new Date();
				document.getElementById("title").innerHTML = input_title;
				document.getElementById("author").innerHTML = input_firstname + " " + input_middlename + " " + input_lastname + " " + date_today;
				document.getElementById("content").innerHTML = input_content;


		}