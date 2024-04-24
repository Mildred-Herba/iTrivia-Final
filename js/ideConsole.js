let console = (function (oldConsole) {


    return {
        argsOutput: function (arg) {
            let outputMessage;

            switch (this.getType(arg)) {
                case "string":
                    outputMessage = `"${arg}"`;
                    break;
                case "object":
                    outputMessage = `Object ${JSON.stringify(arg)}`;
                    break;
                case "array":
                    outputMessage = `Array ${JSON.stringify(arg)}`;
                    break;
                default:
                    outputMessage = arg;
                    break;
            }

            return outputMessage;
        },

        getType: function (arg) {
            if (typeof arg == "string") return "string";
            if (typeof arg == "boolean") return "boolean";
            if (typeof arg == "function") return "function";
            if (typeof arg == "number") return "number";
            if (typeof arg == "undefined") return "undefined";
            if (typeof arg == "object" && !Array.isArray(arg)) return "object";
            if (typeof arg == "object" && Array.isArray(arg)) return "array";
        },

        logMultArgs: function (arguments) {
            let currentLog = "";

            arguments.forEach(arg => {
                currentLog += this.argsOutput(arg) + " ";
            });

            oldConsole.log.apply(oldConsole, arguments);

            oldConsole.log(currentLog);
            consoleLog.push({
                message: currentLog,
                class: `logDefault`
            });

            oldConsole.log(consoleLog);
        },

        logSingArgs: function (logItem) {
            oldConsole.log(logItem);
            consoleLog.push({
                message: this.argsOutput(logItem),
                class: `log--${this.getType(logItem)}`
            });

            oldConsole.log(consoleLog);
        },

        log: function (text) {
            let arrayArgs = Array.from(arguments);
            oldConsole.log(arrayArgs);
            return arrayArgs.length !== 1 ? this.logMultArgs(arrayArgs) : this.logSingArgs(text);
        },
        info: function (text) {
            oldConsole.info(text);
        },
        warn: function (text) {
            oldConsole.warn(text);
        },
        error: function (err) {
            oldConsole.error(err);
            consoleLog.push({
                message: `${err.name}: ${err.message}`,
                class: `logError`
            });
            oldConsole.log(consoleLog);
        }
    };

})(window.console);
