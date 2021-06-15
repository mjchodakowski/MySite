
const _csharp = document.querySelector("#csharp");
const _csharp_ = document.querySelector("#csharp_");
_csharp_.addEventListener("mouseover", e => {
	
	_csharp_.style.backgroundColor = 'white';
	_csharp.style.display="block";
});

_csharp_.addEventListener("mouseout", e => {
	_csharp.style.display="none"
	_csharp_.style.background = 'none';
});

csharp.addEventListener("mouseover", e => {
	
	_csharp.style.backgroundColor = 'white';
	_csharp.style.display="block";
	_csharp_.style.background = 'white';
});

csharp.addEventListener("mouseout", e => {
	_csharp.style.display="none"
	_csharp_.style.background = 'none';
});


const _cplusolus = document.querySelector("#cplusolus");
const _cplusolus_ = document.querySelector("#cplusolus_");
_cplusolus_.addEventListener("mouseover", e => {
	
	_cplusolus_.style.backgroundColor = 'white';
	_cplusolus.style.display="block";
});

_cplusolus_.addEventListener("mouseout", e => {
	_cplusolus.style.display="none"
	_cplusolus_.style.background = 'none';
});

_cplusolus.addEventListener("mouseover", e => {
	
	_cplusolus.style.backgroundColor = 'white';
	_cplusolus.style.display="block";
	_cplusolus_.style.background = 'white';
});

_cplusolus.addEventListener("mouseout", e => {
	_cplusolus.style.display="none"
	_cplusolus_.style.background = 'none';
});


const _c = document.querySelector("#c");
const _c_ = document.querySelector("#c_");
_c_.addEventListener("mouseover", e => {
	
	_c_.style.backgroundColor = 'white';
	_c.style.display="block";
});

_c_.addEventListener("mouseout", e => {
	_c.style.display="none"
	_c_.style.background = 'none';
});

_c.addEventListener("mouseover", e => {
	
	_c.style.backgroundColor = 'white';
	_c.style.display="block";
	_c_.style.background = 'white';
});

_c.addEventListener("mouseout", e => {
	_c.style.display="none"
	_c_.style.background = 'none';
});


const _js = document.querySelector("#js");
const _js_ = document.querySelector("#js_");
_js_.addEventListener("mouseover", e => {
	
	_js_.style.backgroundColor = 'white';
	_js.style.display="block";
});

_js_.addEventListener("mouseout", e => {
	_js.style.display="none"
	_js_.style.background = 'none';
});

_js.addEventListener("mouseover", e => {
	
	_js.style.backgroundColor = 'white';
	_js.style.display="block";
	_js_.style.background = 'white';
});

_js.addEventListener("mouseout", e => {
	_js.style.display="none"
	_js_.style.background = 'none';
});


const _python = document.querySelector("#python");
const _python_ = document.querySelector("#python_");
_python_.addEventListener("mouseover", e => {
	
	_python_.style.backgroundColor = 'white';
	_python.style.display="block";
});

_python_.addEventListener("mouseout", e => {
	_python.style.display="none"
	_python_.style.background = 'none';
});

_python.addEventListener("mouseover", e => {
	
	_python.style.backgroundColor = 'white';
	_python.style.display="block";
	_python_.style.background = 'white';
});

_python.addEventListener("mouseout", e => {
	_python.style.display="none"
	_python_.style.background = 'none';
});


const _bootstrap = document.querySelector("#bootstrap");
const _bootstrap_ = document.querySelector("#bootstrap_");
_bootstrap_.addEventListener("mouseover", e => {
	
	_bootstrap_.style.backgroundColor = 'white';
	_bootstrap.style.display="block";
});

_bootstrap_.addEventListener("mouseout", e => {
	_bootstrap.style.display="none"
	_bootstrap_.style.background = 'none';
});

_bootstrap.addEventListener("mouseover", e => {
	
	_bootstrap.style.backgroundColor = 'white';
	_bootstrap.style.display="block";
	_bootstrap_.style.background = 'white';
});

_bootstrap.addEventListener("mouseout", e => {
	_bootstrap.style.display="none"
	_bootstrap_.style.background = 'none';
});




const _f = document.querySelector("#f");
const _f_ = document.querySelector("#f_");
_f_.addEventListener("mouseover", e => {
	
	_f_.style.backgroundColor = 'white';
	_f.style.display="block";
});

_f_.addEventListener("mouseout", e => {
	_f.style.display="none"
	_f_.style.background = 'none';
});

_f.addEventListener("mouseover", e => {
	
	_f.style.backgroundColor = 'white';
	_f.style.display="block";
	_f_.style.background = 'white';
});

_f.addEventListener("mouseout", e => {
	_f.style.display="none"
	_f_.style.background = 'none';
});


document.querySelectorAll('.scene').forEach((elem) => {

	const modifier = elem.getAttribute('data-modifier')

	basicScroll.create({
		elem: elem,
		from: 0,
		to: 1190,
		direct: true,
		props: {
			'--translateY': {
				from: '0',
				to: `${10 * modifier}px`
			}
		}
	}).start()

})

// tell the embed parent frame the height of the content
if (window.parent && window.parent.parent) {
	window.parent.parent.postMessage(["resultsFrame", {
		height: document.body.getBoundingClientRect().height,
		slug: "ghmo629v"
	}], "*")
}

// always overwrite window.name, in case users try to set it manually
window.name = "result"

let allLines = []

window.addEventListener("message", (message) => {
	if (message.data.console) {
		let insert = document.querySelector("#insert")
		allLines.push(message.data.console.payload)
		insert.innerHTML = allLines.join(";\r")

		let result = eval.call(null, message.data.console.payload)
		if (result !== undefined) {
			console.log(result)
		}
	}
})





/**/
var ile = 0;
function il(wid){
    ile++;
    document.getElementById(wid).innerHTML=ile;
}

var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
