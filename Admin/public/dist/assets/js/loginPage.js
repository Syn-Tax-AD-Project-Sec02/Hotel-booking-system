function validateForm() {
  const admin = document.getElementById("optionsRadios1");
  const staff = document.getElementById("optionsRadios2");

  if (!admin.checked && !staff.checked) {
    // SweetAlert alert if neither radio is selected
    Swal.fire({
      icon: 'warning',
      title: 'Selection Required',
      text: 'Please select either Admin or Staff before logging in.'
    });
    return false; // Prevent form submission
  }

  if (admin.checked) {
    window.location.href = "../../index.html"; // Redirect to Admin dashboard
  } else if (staff.checked) {
  window.location.href = "../../../../Staff/dist/index.html"; // Redirect to Staff dashboard
}

  return false;
  // Redirect based on selection
  
  
}