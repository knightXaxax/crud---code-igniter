$(document).ready(() => {
	load_student_information();
});

var load_student_information = () => {
	$.ajax({
		url: "http://127.0.0.1/crud_ci/students/information",
		method: "POST",
		headers: {
		},
		data: {
		},})
		.done(function(response) {
			let dataset = JSON.parse(atob(atob(JSON.parse(response).data)));
			let mapped_dataset = dataset.map(data => {
				return `
					<div class="card border-muted shadow-lg rounded-lg mb-2 col-lg-8">
						<div class="card-header bg-white text-info" id="heading${data.id}">
							<legend>${data.fullname}</legend>
						</div>

						<div id="collapse${data.id}" aria-labelledby="heading${data.id}" data-parent="#student-information-container">
							<div class="card-body text-dark py-4 px-4">
								<h5 class="card-title">Personal Information</h5>
								<p class="card-text"><em>fullname: </em>${data.fullname}</p>
								<p class="card-text"><em>age: </em>${data.age}</p>
								<p class="card-text"><em>birthday: </em>${data.birthday}</p>
								<p class="card-text"><em>address: </em>${data.address}</p>
								<p class="card-text"><em>student number: </em>${data.student_number}</p>
								<p class="card-text"><em>campus: </em>${data.campus}</p>
								<p class="card-text"><em>username: </em>${data.username}</p>
							</div>
						</div>
					</div>
				`;
			});

			$("#student-information-container").html("");
			$("#student-information-container").append(mapped_dataset);
		})
		.fail(function (error) {
			console.log(error);
		}
	);

	setTimeout(load_student_information, 10000);
}
