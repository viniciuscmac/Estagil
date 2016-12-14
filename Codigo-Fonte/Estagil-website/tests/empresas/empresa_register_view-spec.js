describe('estagil company register page', function () {
    it('should register a new company and set name in cookies', function () {
        element(by.css('[name="form_nome_empresa"]')).sendKeys('TecVisa');
        element(by.css('[name="form_email_empresa"]')).sendKeys('tecvisa@google.com');
        element(by.css('[name="form_telefone_empresa"]')).sendKeys('1140041233');
        element(by.css('[name="form_area_empresa"]')).sendKeys('Tecnologia');
        element(by.css('[name="form_endereco_empresa"]')).sendKeys('Avenida Paulista');
        element(by.css('[name="form_senha_empresa"]')).sendKeys('tecvisa');

        element(by.id('signRegister')).click().then(
            browser.manage().getCookie('empresaCadastrada').then( function (cookie) {
                expect(cookie.value).toEqual('TecVisa');
            })

        );


    });
});