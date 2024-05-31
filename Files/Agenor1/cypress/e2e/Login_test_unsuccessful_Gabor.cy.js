describe('Unsuccessful Log in Test', () => {
  it('Log in was unsuccesful', () => {
    cy.visit('https://nohaweb.com/Agenor/')
    cy.get('[href="https://nohaweb.com/Agenor/public/login"]').click()
    cy.get('input[name="email"]').type('bad@bad.com')
    cy.get('input[name="password"]').type('badbadbad')
    cy.get('button[type="submit"]').click()
    //cy.url().should('include', '/dashboard')
    cy.contains('These credentials do not match our records.')
  })
})