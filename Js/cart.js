var emptyCart=document.querySelector('.panierVide');
var width = document.querySelector('#catalogue a').offsetWidth;
var myLineHover;
var myLine;
if(emptyCart){
    document.querySelector('#catalogue a').addEventListener("mouseover", () => {

    width = document.querySelector('#catalogue a').offsetWidth;
    myLine.remove()
    myLineHover = new LeaderLine(
        LeaderLine.pointAnchor(document.querySelector('#visiterCatalogue'), {
            x: '50%',
            y: '0%'
        }), LeaderLine.pointAnchor(document.querySelector('#catalogue a'), {
            x: width,
            y: '50%'
        }), {
            color: '#3B556D',
            size: 6,
            dash: true,
        }
    );
    myLineHover.setOptions({
        startSocketGravity: [-200, -100]
    });
});
document.querySelector('#catalogue a').addEventListener("mouseout", () => {

    width = document.querySelector('#catalogue a').offsetWidth;
    myLineHover.remove()
    myLine = new LeaderLine(
        LeaderLine.pointAnchor(document.querySelector('#visiterCatalogue'), {
            x: '50%',
            y: '0%'
        }), LeaderLine.pointAnchor(document.querySelector('#catalogue a'), {
            x: width,
            y: '50%'
        }), {
            color: '#3B556D',
            size: 6,
            dash: true,
        }
    );

    myLine.setOptions({
        startSocketGravity: [-200, -100]
    });

})
myLine = new LeaderLine(
    LeaderLine.pointAnchor(document.querySelector('#visiterCatalogue'), {
        x: '50%',
        y: '0%'
    }), LeaderLine.pointAnchor(document.querySelector('#catalogue a'), {
        x: width,
        y: '50%'
    }), {
        color: '#3B556D',
        size: 6,
        dash: true,
    }
);
myLine.setOptions({
    startSocketGravity: [-200, -100]
});
}