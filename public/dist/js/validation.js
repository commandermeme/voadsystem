/**
 * --------------------------------------------------------------------------
 * CoreUI Pro Boostrap Admin Template (2.1.10): validation.js
 * Licensed under MIT (https://coreui.io/license)
 * --------------------------------------------------------------------------
 */

/* eslint-disable no-magic-numbers */
$.validator.setDefaults({
  // submitHandler: function submitHandler() {
  //   // eslint-disable-next-line no-alert
  //   alert('submitted!');
  // }
});
$('#signupForm').validate({
  rules: {
    firstname: 'required',
    lastname: 'required',
    fname: 'required',
    lname: 'required',
    address: 'required',
    phone: 'required',
    licence: 'required',
    type: 'required',
    plate_no: 'required',
    system_id: 'required',
    street: 'required',
    speed_limit: 'required',
    location: 'required',
    username: {
      required: true,
      minlength: 2
    },
    password: {
      required: true,
      minlength: 5
    },
    // eslint-disable-next-line camelcase
    confirm_password: {
      required: true,
      minlength: 5,
      equalTo: '#password'
    },
    email: {
      required: true,
      email: true
    },
    agree: 'required'
  },
  messages: {
    firstname: 'Please enter your firstname',
    lastname: 'Please enter your lastname',
    username: {
      required: 'Please enter a username',
      minlength: 'Your username must consist of at least 2 characters'
    },
    password: {
      required: 'Please provide a password',
      minlength: 'Your password must be at least 5 characters long'
    },
    // eslint-disable-next-line camelcase
    confirm_password: {
      required: 'Please provide a password',
      minlength: 'Your password must be at least 5 characters long',
      equalTo: 'Please enter the same password as above'
    },
    email: 'Please enter a valid email address',
    agree: 'Please accept our policy'
  },
  errorElement: 'em',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox') {
      error.insertAfter(element.parent('label'));
    } else {
      error.insertAfter(element);
    }
  },
  // eslint-disable-next-line object-shorthand
  highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
  },
  // eslint-disable-next-line object-shorthand
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
  }
});
//# sourceMappingURL=validation.js.map

$('#signupForm2').validate({
  rules: {
    firstname: 'required',
    lastname: 'required',
    fname: 'required',
    lname: 'required',
    address: 'required',
    phone: 'required',
    licence: 'required',
    type: 'required',
    plate_no: 'required',
    system_id: 'required',
    street: 'required',
    speed_limit: 'required',
    location: 'required',
    latitude: 'required',
    longitude: 'required',
    area: 'required',
    username: {
      required: true,
      minlength: 2
    },
    password: {
      required: true,
      minlength: 5
    },
    // eslint-disable-next-line camelcase
    confirm_password: {
      required: true,
      minlength: 5,
      equalTo: '#password'
    },
    email: {
      required: true,
      email: true
    },
    agree: 'required'
  },
  messages: {
    firstname: 'Please enter your firstname',
    lastname: 'Please enter your lastname',
    username: {
      required: 'Please enter a username',
      minlength: 'Your username must consist of at least 2 characters'
    },
    password: {
      required: 'Please provide a password',
      minlength: 'Your password must be at least 5 characters long'
    },
    // eslint-disable-next-line camelcase
    confirm_password: {
      required: 'Please provide a password',
      minlength: 'Your password must be at least 5 characters long',
      equalTo: 'Please enter the same password as above'
    },
    email: 'Please enter a valid email address',
    agree: 'Please accept our policy'
  },
  errorElement: 'em',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');

    if (element.prop('type') === 'checkbox') {
      error.insertAfter(element.parent('label'));
    } else {
      error.insertAfter(element);
    }
  },
  // eslint-disable-next-line object-shorthand
  highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
  },
  // eslint-disable-next-line object-shorthand
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
  }
});