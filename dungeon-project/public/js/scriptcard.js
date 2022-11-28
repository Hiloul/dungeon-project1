const userListDOM = document.querySelector('#userList');

const playerList = [];

function showPlayerCardListInDOM(){
    userListDOM.innerHTML = ""
    playerList.forEach( (player, index) => {
        console.log(`La valeur de l'index ${index} est ${player}`)
        console.log("playerList[index] : ", playerList[index])
    
        const playerCard = document.createElement("div")
        playerCard.classList.add("player")
    
        playerCard.innerHTML = `
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/${player.type}.png" />
            <p>${player.description()}</p>
            <p class="level">lvl: ${player.level}</p>
            <div class="xp">
                xp: ${player.xp}
            </div>
            <button class="up">+</button>
        `

        const button = playerCard.querySelector(".up")
        const xpDOM = playerCard.querySelector(".xp")
        const levelDOM = playerCard.querySelector(".level")

        button.addEventListener("click", () => {
            player.upgradeXp()
            
            console.log("player : ", player)
            levelDOM.innerText = `lvl: ${player.level}`
            xpDOM.innerText = `xp: ${player.xp}`
        })

        userListDOM.append(playerCard)
    })
}

// Au chargement de la page
showPlayerCardListInDOM()

// select form
const form = document.querySelector('form')
// add event listener form submit
form.addEventListener('submit', function(event){
    event.preventDefault()
    console.log("form submit")
    // select input
    const inputPseudo = document.querySelector('#pseudo')
    // get value of input
    const pseudoValue = inputPseudo.value

    // select #type
    const selectType = document.querySelector('#type')
    // get value of #type
    const typeValue = selectType.value
    console.log("typeValue : ", typeValue)
    

    const player = {
        pseudo: pseudoValue,
        type: typeValue, // replace value in attribut type in object
        level: 1,
        xp: 0,
        description: function(){
            return `${this.pseudo} is a ${this.type}`
        },
        upgradeXp: function(){
            this.xp += 10
            if(this.xp >= 100){
                this.level += 1
                this.xp = 0
            }
        }
    }

    // add value to playerList array
    playerList.push(player)

    console.log("playerList : ", playerList)
    
    // foreach
    showPlayerCardListInDOM()
})