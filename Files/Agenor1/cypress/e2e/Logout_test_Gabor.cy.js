describe('Successful Log out Test', () => {
  it('Log out was succesful', () => {
    cy.visit('https://nohaweb.com/Agenor/')
    cy.get('[href="https://nohaweb.com/Agenor/public/login"]').click()
    cy.get('input[name="email"]').type('teszt@elek.com')
    cy.get('input[name="password"]').type('tesztelek')
    cy.get('button[type="submit"]').click()
    cy.get('.relative > :nth-child(1) > .inline-flex').click()
    cy.get('.rounded-md > form > .block').click()
    cy.url().should('include', '/public')
  })
})