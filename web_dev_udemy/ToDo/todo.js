let input = prompt('Input: new, list, delete, quit');

const todos = ['todo1','todo2'];

while(input !=="q" && input !=="quit") {
    if (input === 'list') {
        console.log('+++++++++');
        for(let i=0;i<todos.length; i++) {
            console.log(`${i}: ${todos[i]}`)
        }
        console.log('+++++++++');
    } else if (input === 'new') {
        const newTodo = prompt('Input new todo');
        todos.push(newTodo);
        console.log(`Add ${newTodo}`);
    } else if (input === 'delete') {
        const index = parseInt(prompt('Input index to delete'));
        if (!Number.isNaN(index)) {
            console.log(index);
            const deleted = todos.splice(index, 1);
            console.log(`deleted ${deleted[0]}`);

        } else {
            console.log('input enable value');
        }

    }
    input = prompt('Input [new, list, delete, quit]');
}
console.log('quit app!');