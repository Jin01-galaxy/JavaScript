const numbers = [1,2,3,4,5,6];

// numbers.forEach(function print(element){
//     console.log(element);
// });


//215
for (const iterator of numbers) {
    console.log(iterator);
}

//216 map
const doubles = numbers.map(function(num) {
    return num * 2;
});


const movies = [
    {
        title: 'Amadeus',
        score: '99'
    },
    {
        title: 'PPP',
        score: '74'
    },
    {
        title: 'Rockman',
        score: '73'
    },
];

const titles = movies.map(function(movies) {
    return movies.title;
});


//217 arrow_func
const add = (x, y) => {
    return x + y;
}

const rollDie = () => {
    return Math.floor(Math.random() * 6) + 1;
} 

