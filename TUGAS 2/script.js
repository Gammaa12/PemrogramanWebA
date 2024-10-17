document.addEventListener('DOMContentLoaded', () => {
    const taskInput = document.getElementById('newTask');
    const addButton = document.getElementById('addTask');
    const taskList = document.getElementById('taskList');
    let tasks = [
        "I will wake up at 8 in the morning",
        "I will practice html for 1 hour",
        "I will give time for 2 hours css",
        "Then I will have breakfast"
    ];
    let editingIndex = -1;

    function renderTasks() {
        taskList.innerHTML = '';
        tasks.forEach((task, index) => {
            const li = document.createElement('li');
            li.className = 'task-item';
            li.innerHTML = `
                <span class="task-text">${task}</span>
                <div class="task-buttons">
                    <button class="edit-button" onclick="editTask(${index})">
                        <i data-lucide="edit-2"></i>
                    </button>
                    <button class="delete-button" onclick="deleteTask(${index})">
                        <i data-lucide="trash-2"></i>
                    </button>
                </div>
            `;
            taskList.appendChild(li);
        });
        lucide.createIcons();
    }

    function addTask() {
        const newTask = taskInput.value.trim();
        if (newTask !== '') {
            if (editingIndex !== -1) {
                tasks[editingIndex] = newTask;
                editingIndex = -1;
                addButton.textContent = 'Add';
            } else {
                tasks.push(newTask);
            }
            taskInput.value = '';
            renderTasks();
        }
    }

    window.editTask = function(index) {
        taskInput.value = tasks[index];
        editingIndex = index;
        addButton.textContent = 'Update';
    };

    window.deleteTask = function(index) {
        tasks.splice(index, 1);
        renderTasks();
    };

    addButton.addEventListener('click', addTask);
    taskInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            addTask();
        }
    });

    renderTasks();
});