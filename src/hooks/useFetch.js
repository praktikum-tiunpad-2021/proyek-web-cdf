import { useState } from "react";
import { useEffect } from "react";

const useFetch = () => {
    const [data, setData] = useState(null);

    fetch("../data/db.json")
        .then(res => res.json())
        .then(json => console.log(json));
}
 
export default useFetch;