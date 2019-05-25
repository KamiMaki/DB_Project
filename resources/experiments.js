/* jshint unused:false, jquery:true, undef:false */

function returnEscapedHtml(string) {
    // This function returns the HTML entity escaped version of a string
    // Do NOT depend on this for security, you must always perform the same procedure in the backend!

    if (string === "") {
        return "";
    }

    var entityMap = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': '&quot;',
        "'": '&#39;',
        "/": '&#x2F;'
    };

    if (typeof string === "undefined") {
        return "";
    } else {
        return String(string).replace(/[&<>"'\/]/g, function (s) {
            return entityMap[s];
        });
    }
}

function Message(title,body)
{
	//modalState("collapse");
    setTimeout(function () {
            saoLoneButton(true);
			modalState(true);
            saoModalSetContent(title, body);
            modalState("expand");
        }, 350);
		
        $("#SAOModalAccept").off();
        $("#SAOModalAccept").bind("click", function () {
            saoMenuSelectAudio.play();
            modalState(false);
        });
}


function modalState(state) {
    if (state === true) {
        //expand the modal
        $("#SAOModal").modal("show");
        setTimeout(function () {
            modalState("expand");
        }, 200);
    } else if (state === false) {
        //collapse the modal
        modalState("collapse");
        setTimeout(function () {
            $("#SAOModal").modal("hide");
        }, 200);

    } else if (state === "collapse") {
        $("#SAOModal .modal-dialog").addClass("closed");
        $("#SAOModal .modal-dialog").removeClass("open");

    } else if (state === "expand") {
        saoMenuOpenAudio.play();
        $("#SAOModal .modal-dialog").removeClass("closed");
        $("#SAOModal .modal-dialog").addClass("open");

    } else { //toggle
        $("#SAOModal .modal-dialog.closed").addClass("opening");
        $("#SAOModal .modal-dialog.open").addClass("closing");

        $("#SAOModal .modal-dialog.closing").addClass("closed");
        $("#SAOModal .modal-dialog.closing").removeClass("open");
        $("#SAOModal .modal-dialog.opening").addClass("open");
        $("#SAOModal .modal-dialog.opening").removeClass("closed");

        $("#SAOModal .modal-dialog.closed").removeClass("closing");
        $("#SAOModal .modal-dialog.open").removeClass("opening");
    }
}

function saoModalSetContent(title, body) {
    $("#SAOModalTitle").html(title);
    $("#SAOModalBody").html(body);
}

function saoLoneButton(state) {
    if (state === true) {
        // Hide deny button
        $("#SAOModalDeny").addClass("hidden-xs-up");
        $("#SAOModalAccept").removeClass("col-xs-6");
        $("#SAOModalAccept").addClass("col-xs-12");
    } else {
        // Restore the deny button
        $("#SAOModalDeny").removeClass("hidden-xs-up");
        $("#SAOModalAccept").addClass("col-xs-6");
        $("#SAOModalAccept").removeClass("col-xs-12");
    }
}

function saoModal(title, body, positiveResponseTitle, positiveResponse, isRefresh,type) {
	
        title = "Confirm";
		if(type === 1)
		{	
			body = "Using this Account to login?";
		}
		else if(type === 2)
		{	
			body = "All of the information is correct ?";
		}
      


    if (isRefresh === true) {
        modalState("collapse");
        setTimeout(function () {
            saoLoneButton(true);
            saoModalSetContent(title, body);
            modalState("expand");
        }, 350);

        $("#SAOModalAccept").off();
        $("#SAOModalAccept").bind("click", function () {
            saoMenuSelectAudio.play();
            modalState(false);
        });

    } else {
        $("#SAOModalAccept").off();
        $("#SAOModalAccept").bind("click", function () {
            saoMenuSelectAudio.play();
			if(type === 1)
			{
				document.getElementById("Login_Form").submit();
			}
			else if(type === 2)
			{
				document.getElementById("Register_Form").submit();
			}
        });

        $("#SAOModalDeny").off();
        $("#SAOModalDeny").bind("click", function () {
            saoMenuSelectAudio.play();
            modalState(false);
        });

        saoModalSetContent(title, body);
        modalState(true);
    }
}

$("#SAOModalButton").bind("click", function () {
    saoModal(
        returnEscapedHtml($("#SAOInputTitle").val()),
        returnEscapedHtml($("#SAOInputMessage").val()),
        returnEscapedHtml($("#SAOPositiveResponseTitleField").val()),
        returnEscapedHtml($("#SAOPositiveResponseField").val()),
        false,1
    );
});

$("#SAOModalButton1").bind("click", function () {
    saoModal(
        returnEscapedHtml($("#SAOInputTitle").val()),
        returnEscapedHtml($("#SAOInputMessage").val()),
        returnEscapedHtml($("#SAOPositiveResponseTitleField").val()),
        returnEscapedHtml($("#SAOPositiveResponseField").val()),
        false,2
    );
});

$("#SAOModal").on('hidden.bs.modal', function () {
    saoLoneButton(false);
    $("#SAOModalDeny").off();
    $("#SAOModalAccept").off();
});