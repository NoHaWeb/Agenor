describe('Bejelentkezés teszt', () => {
  it('Sikeres bejelentkezés', () => {
	  
    cy.visit('https://nohaweb.com/Agenor/')
	
	cy.visit('https://nohaweb.com/Agenor')
	
	cy.get('a[href="https://nohaweb.com/Agenor/public/login"]').click()

    cy.get('input[name="email"]').type('vessz@etek.com')

    cy.get('input[name="password"]').type('vesszetek')

    cy.get('button[type="submit"]').click()

    cy.url().should('include', '/dashboard')
    cy.contains('logged in')
  })
})
