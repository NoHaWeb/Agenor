describe('Bejelentkezés teszt', () => {
  it('Sikeres bejelentkezés', () => {
	  
    cy.visit('https://nohaweb.com/Agenor/')
	
	cy.visit('https://nohaweb.com/Agenor')
	
	cy.get('a[href="https://nohaweb.com/Agenor/public/login"]').click()

    cy.get('input[name="email"]').type('teszt@elek.com')

    cy.get('input[name="password"]').type('tesztelek')

    cy.get('button[type="submit"]').click()

    cy.url().should('include', '/dashboard')
    cy.contains('logged in')
  })
})
