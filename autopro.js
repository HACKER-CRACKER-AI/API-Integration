
// using Twilio SendGrid's v3 Node.js Library
// https://github.com/sendgrid/sendgrid-nodejs
//javascript
const sgMail = require('@sendgrid/mail')
sgMail.setApiKey(process.env.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)
const msg = {
  to: 'bhuvaneshbhattarai@gmail.com', // Change to your recipient
  from: 'bhbh19cs@cmrit.ac.in', // Change to your verified sender
  subject: 'Sending with SendGrid is Fun',
  text: 'and easy to do anywhere, even with Node.js',
  html: '<strong>and easy to do anywhere, even with Node.js</strong>',
}
sgMail
  .send(msg)
  .then(() => {
    console.log('Email sent')
  })
  .catch((error) => {
    console.error(error)
  })