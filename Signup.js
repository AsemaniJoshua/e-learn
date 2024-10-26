function showForm(formId) {
    var studentForm = document.getElementById('student');
    var instructorForm = document.getElementById('instructor');
    
    if (formId === 'student') {
        studentForm.style.display = 'block';
        instructorForm.style.display = 'none';
    } else if (formId === 'instructor') {
        studentForm.style.display = 'none';
        instructorForm.style.display = 'block';
    }
}


