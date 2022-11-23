function search(){
    const input_search = document.getElementById("input-search").value;
    // const text = "adalah";
    if (document.body.textContent.includes(input_search)) {
        console.log('✅ text exists on page');
    } else {
        console.log('⛔️ text does not exist on page');
    }

}