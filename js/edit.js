function editStudent(idStudent, firstName, lastName, email, address, birthdate, phone, ageCategory, representative) {

  let idStudentInput = document.querySelector('#idStudentEdit')
  let firstNameInput = document.querySelector('#firstNameEdit')
  let lastNameInput = document.querySelector('#lastNameEdit')
  let emailInput = document.querySelector('#emailEdit')
  let addressInput = document.querySelector('#addressEdit')
  let birthdateInput = document.querySelector('#birthdateEdit')
  let phoneInput = document.querySelector('#phoneEdit')
  let ageCategoryInput = document.querySelector('#ageCategoryEdit')
  let representativeInput = document.querySelector('#representativeEdit')

  idStudentInput.value        = idStudent
  firstNameInput.value        = firstName
  lastNameInput.value         = lastName
  emailInput.value            = email
  addressInput.value          = address
  birthdateInput.value        = birthdate
  phoneInput.value            = phone
  ageCategoryInput.value      = ageCategory
  representativeInput.value   = representative

}
