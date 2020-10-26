const validateUserInformation = () => {
    
}

const validateLogin = (username, password, errorDom) => {
    let isValidated = true
    let errorMessage = ''
    if(!username || !password){
        isValidated = false
        errorMessage = 'Username and password cannot be empty'
    }

    if(!isValidated){
        errorDom.innerHtml = errorMessage
    }
    return isValidated
}

const validateSignup = (fullName, email, username, dateOfBirth, password, confirmPassword, errorDom) => {
    let isValidated = true
    let errorMessage = ''
    if(!fullName || !email || !username || !dateOfBirth || !password || !confirmPassword){
        isValidated = false
        errorMessage = 'Username and password cannot be empty'
    }
    //validate full name
    else if(!(/^([a-zA-Z]|[a-zA-Z][a-zA-Z ]*[a-zA-Z])$/.test(fullName.value))){
        isValidated = false
        message = 'Name can only contain alphabet character'
    }
    //check for email field
    else if(!(/^[a-zA-Z-.]+@(\w+\.){1,3}\w{2,3}$/.test(email))){
        isValidated = false
        message = 'Please input a correct email'
    }
    //check for startDate field
    else if(Date.parse(startDate) >= new Date().getTime()){
        isValidated = false
        message = 'Please input a correct date of birth'
    }
    //check for password field
    else if(password !== confirmPassword){
        isValidated = false
        message = 'Password is not matched'
    }

    if(!isValidated){
        errorDom.innerHtml = errorMessage
    }
    return isValidated
}