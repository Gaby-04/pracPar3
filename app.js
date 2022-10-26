const axios = require('axios').default;
async function connectToURL(url){
    const resp =  await axios.get(url);
    console.log(resp.data)
}

connectToURL('').catch(err => {
    console.log(err.toString())
})
