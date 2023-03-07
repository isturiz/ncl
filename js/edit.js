function editStudent(idStudent, firstName, lastName, email, address, birthdate, phone, ageCategory) {

  let idStudentInput = document.querySelector('#idStudentEdit')
  let firstNameInput = document.querySelector('#firstNameEdit')
  let lastNameInput = document.querySelector('#lastNameEdit')
  let emailInput = document.querySelector('#emailEdit')
  let addressInput = document.querySelector('#addressEdit')
  let birthdateInput = document.querySelector('#birthdateEdit')
  let phoneInput = document.querySelector('#phoneEdit')
  let ageCategoryInput = document.querySelector('#ageCategoryEdit')

  idStudentInput.value    = idStudent
  firstNameInput.value    = firstName
  lastNameInput.value     = lastName
  emailInput.value        = email
  addressInput.value      = address
  birthdateInput.value    = birthdate
  phoneInput.value        = phone
  ageCategoryInput.value  = ageCategory
}
