describe('Faek Regisztrációs teszt', () => {
    it('Sikertelen regisztráció', () => {
        
      cy.visit('https://nohaweb.com/Agenor/')
      
      cy.get('a[href="https://nohaweb.com/Agenor/public/register"]').click()
  
      cy.get('input[name="name"]').type('Uj User')
      
      cy.get('input[name="email"]').type('valami@valami')
  
      cy.get('input[name="password"]').type('barmi')

      cy.get('input[name="password_confirmation"]').type('barmi')
  
      cy.get('button[type="submit"]').click()
  
      cy.url().should('include', '/dashboard')
      cy.contains('logged in')
    })
  })