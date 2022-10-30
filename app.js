const sgMail = require('@sendgrid/mail')

const API_KEY =
    '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';

sgMail.setApiKey(API_KEY);

const message={
    to:'bhuvaneshbhattarai@gmail.com',
    from:'bhuvaneshbhattarai@gmail.com',
    subject:'Hello',
    text:'Hello',
    html:'<h1>Hello</h1>',
};

sgMail.send(message)
    .then((respose)=>console.log('Email sent...'))
.catch((error)=>console.log(error.message));