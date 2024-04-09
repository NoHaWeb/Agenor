describe('template spec', () => {
  it('passes', () => {
    cy.visit('http://127.0.0.1:8000/')
    cy.get('[href="http://127.0.0.1:8000/login"]').click()
    cy.get('#email').type("sda@asds.com")
    cy.get('#password').type("asdasdasdasd")
    cy.get('.flex > .inline-flex').click()
  })
})