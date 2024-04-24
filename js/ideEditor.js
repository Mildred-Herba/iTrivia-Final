const consoleLogList = document.querySelector('.eOutput');
const executeEditor = document.querySelector('.editorRun');
const resetEditor = document.querySelector('.editorReset');


let codeEdit = ace.edit("eCode");
let consoleLog = [];
codeEdit.setTheme("ace/theme/cobalt");

let cEditorLib = {

    clearConsole() {
        consoleLog.length = 0;

        while (consoleLogList.firstChild) {
            consoleLogList.removeChild(consoleLogList.firstChild);
        }

    },

    printConsole(){
        consoleLog.forEach(log => {
            const newLogItem = document.createElement('li');
            const newLogText = document.createElement('pre');

            newLogText.className = log.class;
            newLogItem.textContent = `> ${log.message}`;

            newLogItem.appendChild(newLogText);

            consoleLogList.appendChild(newLogItem);
        });
    },

    init() {
        codeEdit.setOptions({
            fontFamily: '',
            fontSize: '12pt',
            enableBasicAutocompletion: true,
            enableLiveAutocompletion: true,
        });
    }
}

cEditorLib.init();

executeEditor.addEventListener('click', () => {
    cEditorLib.clearConsole();
    const inputCode = codeEdit.getValue();

    try {
        new Function(inputCode)();
    } catch (err) {
        console.error(err);
    }

    cEditorLib.printConsole();
});

resetEditor.addEventListener('click', () => {
    codeEdit.setValue("");

    cEditorLib.clearConsole();
});



function option() {
    let language = document.getElementById("lang").value;

    switch (language) {
        case "js":
            js();
            break;
        case "php":
            php();
            break;
        case "java":
            java();
            break;
        case "c++":
            ccpp();
            break;
    }
}

function js() {
    codeEdit.session.setMode("ace/mode/javascript");
    let deFaultCode = 'console.log("Hello World!");';
    codeEdit.setValue(deFaultCode);

    
}

function php() {
    codeEdit.session.setMode("ace/mode/php");
    let deFaultCode = 'echo "Hello World";';
    codeEdit.setValue(deFaultCode);
}

function java() {
    codeEdit.session.setMode("ace/mode/java");
    let deFaultCode = 'System.out.println("Hello World");';
    codeEdit.setValue(deFaultCode);
}

function ccpp() {
    codeEdit.session.setMode("ace/mode/ccpp");
    let deFaultCode = 'cout << Hello World";';
    codeEdit.setValue(deFaultCode);
}
