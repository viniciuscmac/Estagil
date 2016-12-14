describe('estagil user register page', function () {
   it('should register a new user with id', function () {
       element(by.css('[name="form_nome"]')).sendKeys('Lucas de Assis');
       element(by.css('[name="form_email"]')).sendKeys('lucas@google.com');
       element(by.css('[name="form_telefone"]')).sendKeys('6295433322');
       element(by.css('[name="form_curso"]')).sendKeys('Engenharia de Software');
       element(by.css('[name="form_periodo"]')).sendKeys('6');
       element(by.css('[name="form_birthday_year"]')).sendKeys('1994');
       element(by.css('[name="birthday_month"]')).sendKeys('4');
       element(by.css('[name="birthday_day"]')).sendKeys('20');
       element(by.css('[name="form_endereco"]')).sendKeys('avenida t63');
       element(by.css('[name="form_senha"]')).sendKeys('google');
       element(by.css('[name="form_confirme"]')).sendKeys('google');

       element(by.id('signRegister')).click().then(
           browser.manage().getCookie('estagiarioCadastrado').then( function (cookie) {
               expect(cookie.value).toEqual('Lucas de Assis');
           })

       );


   });
});