const members = [
  {
    id: "shn00559",
    name: "Abdulhafiz Ahmed",
    role: "Backend", 
    image: "https://res.cloudinary.com/rexdavinci/image/upload/v1566555418/IMG_20190817_193234.jpg"
  },
  {
    id: "shn00546",
    name: "Stephen Robinson",
    role: "Mobile", 
    image: "https://res.cloudinary.com/j-nai/image/upload/v1567171357/Steve%20Rob.jpg"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  },
  {
    id: "ADD MEMBER CODE HERE",
    name: "ADD MEMBER CODE HERE",
    role: "ADD MEMBER ROLE HERE", 
    image: "ADD NEW MEMBER IMAGE HERE"
  }
]

function createImage(member){
  let image = document.createElement("img")
  image.setAttribute("src", member.image)
  image.setAttribute("alt", member.name)
  image.setAttribute("width", "138")
  image.setAttribute ("height", "186")
  return image
  }
  
  function generateTeam() {
  let teamMembers = document.getElementById("team-members")
  return members.map(member=>{
    teamMembers.appendChild(createMember(member))
  }) 
}

function createMember(member){
  let divElement = document.createElement("div")
  let nameElement = document.createElement("p")
  let roleElement = document.createElement("p")
  let nameContent = document.createTextNode(member.name)
  let roleContent = document.createTextNode(member.role)
  divElement.className = "member"
  divElement.appendChild(createImage(member))
  nameElement.appendChild(nameContent)
  roleElement.appendChild(roleContent)
  divElement.appendChild(nameElement)
  divElement.appendChild(roleElement)
  return divElement
}
