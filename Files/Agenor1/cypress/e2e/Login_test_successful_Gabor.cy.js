describe('Successful Log in Test', () => {
  it('Log in was succesful', () => {
    cy.visit('https://nohaweb.com/Agenor/')
    cy.get('[href="https://nohaweb.com/Agenor/public/login"]').click()
    cy.get('input[name="email"]').type('teszt@elek.com')
    cy.get('input[name="password"]').type('tesztelek')
    cy.get('button[type="submit"]').click()
    cy.url().should('include', '/dashboard')
  })
})